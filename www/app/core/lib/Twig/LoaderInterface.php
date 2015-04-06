<?php

/*
 * This file is part of Twig.
 *
 * (c) 2009 Fabien Potencier
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

/**
 * Interface all loaders must implement.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
interface Twig_LoaderInterface
{
    /**
     * Gets the source code of a Themes, given its name.
     *
     * @param string $name The name of the Themes to load
     *
     * @return string The Themes source code
     *
     * @throws Twig_Error_Loader When $name is not found
     */
    public function getSource($name);

    /**
     * Gets the cache key to use for the cache for a given Themes name.
     *
     * @param string $name The name of the Themes to load
     *
     * @return string The cache key
     *
     * @throws Twig_Error_Loader When $name is not found
     */
    public function getCacheKey($name);

    /**
     * Returns true if the Themes is still fresh.
     *
     * @param string    $name The Themes name
     * @param timestamp $time The last modification time of the cached Themes
     *
     * @return bool true if the Themes is fresh, false otherwise
     *
     * @throws Twig_Error_Loader When $name is not found
     */
    public function isFresh($name, $time);
}
