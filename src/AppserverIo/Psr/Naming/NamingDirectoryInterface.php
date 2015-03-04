<?php

/**
 * \AppserverIo\Psr\Naming\NamingDirectoryInterface
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
 * @link      https://github.com/appserver-io-psr/naming
 * @link      http://www.appserver.io
 */

namespace AppserverIo\Psr\Naming;

use AppserverIo\Psr\Context\ContextInterface;

/**
 * Interface for naming directory implementations.
 *
 * @author    Tim Wagner <tw@appserver.io>
 * @copyright 2015 TechDivision GmbH <info@appserver.io>
 * @license   http://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
 * @link      https://github.com/appserver-io-psr/naming
 * @link      http://www.appserver.io
 */
interface NamingDirectoryInterface extends ContextInterface
{

    /**
     * Returns the directory name.
     *
     * @return string The directory name
     */
    public function getName();

    /**
     * Returns the parent directory.
     *
     * @return \AppserverIo\Psr\Naming\NamingDirectoryInterface
     */
    public function getParent();

    /**
     * Returns the scheme.
     *
     * @return string The scheme we want to use
     */
    public function getScheme();

    /**
     * Binds the passed instance with the name to the naming directory.
     *
     * @param string $name  The name to bind the object with
     * @param object $value The object instance to bind
     * @param array  $args  The array with the arguments
     *
     * @return void
     */
    public function bind($name, $value, array $args = array());

    /**
     * Binds the passed callback with the name to the naming directory.
     *
     * @param string   $name     The name to bind the callback with
     * @param callable $callback The callback to be invoked when searching for
     * @param array    $args     The array with the arguments passed to the callback when executed
     *
     * @return void
     * @see \AppserverIo\Psr\Naming\NamingDirectoryInterface::bind()
     */
    public function bindCallback($name, callable $callback, array $args = array());


    /**
     * Queries the naming directory for the requested name and returns the value
     * or invokes the bound callback.
     *
     * @param string $name The name of the requested value
     * @param array  $args The arguments to pass to the callback
     *
     * @return mixed The requested value
     * @throws \AppserverIo\Psr\Naming\NamingException Is thrown if the requested name can't be resolved in the directory
     */
    public function search($name, array $args = array());

    /**
     * Create and return a new naming subdirectory with the attributes
     * of this one.
     *
     * @param string $name   The name of the new subdirectory
     * @param array  $filter Array with filters that will be applied when copy the attributes
     *
     * @return \AppserverIo\Psr\Naming\NamingDirectoryInterface The new naming subdirectory
     */
    public function createSubdirectory($name, array $filter = array());
}
