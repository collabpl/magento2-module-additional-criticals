<?php
/**
 * @category  Collab
 * @package   Collab\AdditionalCriticals
 * @author    Marcin Jędrzejewski <m.jedrzejewski@collab.pl>
 * @copyright 2024 Collab
 * @license   MIT
 */

declare(strict_types=1);

use Magento\Framework\Component\ComponentRegistrar;

ComponentRegistrar::register(ComponentRegistrar::MODULE, 'Collab_AdditionalCriticals', __DIR__);
