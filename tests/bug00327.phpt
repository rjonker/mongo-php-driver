--TEST--
Test for bug PHP-327: 2D index names
--FILE--
<?php
class test extends MongoCollection
{
	public static function toIndexString( $args )
	{
		return parent::toIndexString( $args );
	}
}
$geoIndex = array( 'geo' => '2d' );

echo test::toIndexString( $geoIndex ), "\n";
--EXPECT--
geo_2d
