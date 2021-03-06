<?php
namespace WPGDPRC\Utils;

/**
 * Class IpAddress
 * @package WPGDPRC\Utils
 */
class IpAddress {

	/**
	 * Ensures an ip address is both a valid IP and does not fall within
	 * a private network range.
	 * @param string $ipAddress
	 * @return bool
	 */
	public static function validateIp( $ipAddress = '' ) : bool {
		if ( strtolower( $ipAddress ) === 'unknown' ) {
			return false;
		}

		// Generate ipv4 network address
		$ipAddress = ip2long( $ipAddress );
		// If the ip is set and not equivalent to 255.255.255.255
		if ( $ipAddress !== false && $ipAddress !== -1 ) {
			/**
			 * Make sure to get unsigned long representation of ip
			 * due to discrepancies between 32 and 64 bit OSes and
			 * signed numbers (ints default to signed in PHP)
			 */
			$ipAddress = sprintf( '%u', $ipAddress );
			// Do private network range checking
			if ( $ipAddress >= 0 && $ipAddress <= 50331647 ) {
				return false;
			}
			if ( $ipAddress >= 167772160 && $ipAddress <= 184549375 ) {
				return false;
			}
			if ( $ipAddress >= 2130706432 && $ipAddress <= 2147483647 ) {
				return false;
			}
			if ( $ipAddress >= 2851995648 && $ipAddress <= 2852061183 ) {
				return false;
			}
			if ( $ipAddress >= 2886729728 && $ipAddress <= 2887778303 ) {
				return false;
			}
			if ( $ipAddress >= 3221225984 && $ipAddress <= 3221226239 ) {
				return false;
			}
			if ( $ipAddress >= 3232235520 && $ipAddress <= 3232301055 ) {
				return false;
			}
			if ( $ipAddress >= 4294967040 ) {
				return false;
			}
		}
		return true;
	}

	/**
	 * @return string
	 */
	public static function getClientIp() {
		// Check for shared internet/ISP IP
        $httpClientIp = sanitize_url( wp_unslash( $_SERVER['HTTP_CLIENT_IP'] ?? '' ) ); // phpcs:ignore
		if ( ! empty( $httpClientIp ) && self::validateIp( $httpClientIp ) ) {
			return $httpClientIp;
		}

		// Check for IPs passing through proxies
        $httpXForwardedFor = sanitize_url( wp_unslash( $_SERVER['HTTP_X_FORWARDED_FOR'] ?? '' ) ); // phpcs:ignore
		if ( ! empty( $httpXForwardedFor ) ) {
			// Check if multiple ips exist in var
			if ( strpos( $httpXForwardedFor, ',' ) !== false ) {
				$listOfIpAddresses = explode( ',', sanitize_url( wp_unslash( $httpXForwardedFor ?? '' ) ) ); // phpcs:ignore
				foreach ( $listOfIpAddresses as $ipAddress ) {
					$ipAddress = trim( $ipAddress );
					if ( self::validateIp( $ipAddress ) ) {
						return $ipAddress;
					}
				}
			} elseif ( self::validateIp( $httpXForwardedFor ) ) {
				return $httpXForwardedFor;
			}
		}

        $httpXForwarded = sanitize_url( wp_unslash( $_SERVER['HTTP_X_FORWARDED'] ?? '' ) ); // phpcs:ignore
		if ( ! empty( $httpXForwarded ) && self::validateIp( $httpXForwarded ) ) {
			return $httpXForwarded;
		}

        $httpXClusterClientIp = sanitize_url( wp_unslash( $_SERVER['HTTP_X_CLUSTER_CLIENT_IP'] ?? '' ) ); // phpcs:ignore
		if ( ! empty( $httpXClusterClientIp ) && self::validateIp( $httpXClusterClientIp ) ) {
			return$httpXClusterClientIp;
		}

        $httpForwardedFor = sanitize_url( wp_unslash( $_SERVER['HTTP_FORWARDED_FOR'] ?? '' ) ); // phpcs:ignore
		if ( ! empty( $httpForwardedFor ) && self::validateIp( $httpForwardedFor ) ) {
			return $httpForwardedFor;
		}

        $httpForwarded = sanitize_url( wp_unslash( $_SERVER['HTTP_FORWARDED'] ?? '' ) ); // phpcs:ignore
		if ( ! empty( $httpForwarded ) && self::validateIp( $httpForwarded ) ) {
			return $httpForwarded;
		}

		// Return unreliable ip since all else failed
		return sanitize_url( wp_unslash( $_SERVER['REMOTE_ADDR'] ?? '') ); // phpcs:ignore
	}

	/**
	 * @param string $ipAddress
	 * @return bool
	 */
	public static function checkIp( $ipAddress = '' ) {
		return self::getClientIp() === $ipAddress;
	}

    /**
     * @param string $ipAddress
     * @return mixed
     */
    public static function unSlashSanitize( string $ipAddress = '' ) {
        return sanitize_url( wp_unslash( $ipAddress ) );
    }
}
