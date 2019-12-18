<?php
namespace PoP\LocationsWP\TypeAPIs;

use WP_Post;
use PoP\Locations\TypeAPIs\LocationTypeAPIInterface;
/**
 * Methods to interact with the Type, to be implemented by the underlying CMS
 */
class LocationTypeAPI implements LocationTypeAPIInterface
{
    /**
     * Indicates if the passed object is of type Location
     *
     * @param [type] $object
     * @return boolean
     */
    public function isInstanceOfLocationType($object): bool
    {
        return ($object instanceof WP_Post) && $object->post_type == \EM_POST_TYPE_LOCATION;
    }
}
