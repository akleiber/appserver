<?php

/**
 * \AppserverIo\Appserver\Core\Api\Node\ManagerNodeInterface
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Open Software License (OSL 3.0)
 * that is available through the world-wide-web at this URL:
 * http://opensource.org/licenses/osl-3.0.php
 *
 * PHP version 5
 *
 * @author    Tim Wagner <tw@appserver.io>
 * @copyright 2015 TechDivision GmbH <info@appserver.io>
 * @license   http://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
 * @link      https://github.com/appserver-io/appserver
 * @link      http://www.appserver.io
 */

namespace AppserverIo\Appserver\Core\Api\Node;

use AppserverIo\Psr\Application\ManagerConfigurationInterface;

/**
 * Interface for the manager configuration node.
 *
 * @author    Tim Wagner <tw@appserver.io>
 * @copyright 2015 TechDivision GmbH <info@appserver.io>
 * @license   http://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
 * @link      https://github.com/appserver-io/appserver
 * @link      http://www.appserver.io
 */
interface ManagerNodeInterface extends ManagerConfigurationInterface
{

    /**
     * Array with the directories.
     *
     * @param array $directories The directories
     *
     * @return void
     */
    public function setDirectories(array $directories);

    /**
     * Array with the directories.
     *
     * @return \AppserverIo\Appserver\Core\Api\Node\DirectoryNode[]
     */
    public function getDirectories();

    /**
     * Array with the descriptors.
     *
     * @param array $descriptors The descriptors
     *
     * @return void
     */
    public function setDescriptors(array $descriptors);

    /**
     * Array with the descriptors.
     *
     * @return array
     */
    public function getDescriptors();

    /**
     * Returns the class name.
     *
     * @return string The class name
     */
    public function getType();

    /**
     * Returns the factory class name.
     *
     * @return string The factory class name
     */
    public function getFactory();

    /**
     * Array with the handler params to use.
     *
     * @return array
     */
    public function getParams();

    /**
     * Array with the handler params to use.
     *
     * @param array $params The handler params
     *
     * @return void
     */
    public function setParams(array $params);

    /**
     * Sets the param with the passed name, type and value.
     *
     * @param string $name  The param name
     * @param string $type  The param type
     * @param mixed  $value The param value
     *
     * @return void
     */
    public function setParam($name, $type, $value);

    /**
     * Returns the param with the passed name casted to
     * the specified type.
     *
     * @param string $name The name of the param to be returned
     *
     * @return mixed The requested param casted to the specified type
     */
    public function getParam($name);

    /**
     * Returns the params casted to the defined type
     * as associative array.
     *
     * @return array The array with the casted params
     */
    public function getParamsAsArray();
}
