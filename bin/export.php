<?php
/**
 * Copyright © EcomDev B.V. All rights reserved.
 * See LICENSE for license details.
 */

use EcomDev\MagentoMigration\ExportApplication;
use League\CLImate\CLImate;

require __DIR__ . '/../vendor/autoload.php';

ExportApplication::create()->run(new CLImate());
