<?php
/**
 * Copyright © 2015 Magento. All rights reserved.
 * See COPYING.txt for license details.
 */
namespace Magento\Framework\Setup;

/**
 * Interface for handling options in deployment configuration tool
 */
interface ConfigOptionsListInterface
{
    /**
     * Gets a list of input options so that user can provide required
     * information that will be used in deployment config file
     *
     * @return Option\AbstractConfigOption[]
     */
    public function getOptions();

    /**
     * Creates array of ConfigData objects from user inputted data.
     * Data in these objects will be stored in array form in deployment config file.
     *
     * @param array $options
     * @param array $currentConfig
     * @return \Magento\Framework\Config\Data\ConfigData[]
     */
    public function createConfig(array $options, array $currentConfig = []);

    /**
     * Validates user input option values and returns error messages
     *
     * @param array $options
     * @return string[]
     */
    public function validate(array $options);
}
