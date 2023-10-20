<?php

namespace UnitTests\TestHelpers\mock;

use DataWarehouse\Query\SUPREMM\JobMetadata;

/* Unfortunately, the JobMetadata class was not designed to be testable
* so this workaround is a necessary evil.
*/
class JobMetadataWorkaround extends JobMetadata
{
    public function __construct() {
    }
}
