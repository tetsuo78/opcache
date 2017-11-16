<?php

namespace OpcacheBundle\Entity;

/**
 * Opcache
 */
class Opcache
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $pageTitle;

    /**
     * @var string
     */
    private $statusDataRows;

    /**
     * @var string
     */
    private $configDataRows;

    /**
     * @var string
     */
    private $scriptStatusRows;

    /**
     * @var string
     */
    private $scriptStatusCount;

    /**
     * @var string
     */
    private $graphDataSetJson;

    /**
     * @var string
     */
    private $humanUsedMemory;

    /**
     * @var string
     */
    private $humanFreeMemory;

    /**
     * @var string
     */
    private $humanWastedMemory;

    /**
     * @var string
     */
    private $usedMemory;

    /**
     * @var string
     */
    private $freeMemory;

    /**
     * @var string
     */
    private $wastedMemory;

    /**
     * @var string
     */
    private $wastedMemoryPercentage;

    /**
     * @var string
     */
    private $d3Scripts;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set pageTitle
     *
     * @param string $pageTitle
     *
     * @return Opcache
     */
    public function setPageTitle($pageTitle)
    {
        $this->pageTitle = $pageTitle;

        return $this;
    }

    /**
     * Get pageTitle
     *
     * @return string
     */
    public function getPageTitle()
    {
        return $this->pageTitle;
    }

    /**
     * Set statusDataRows
     *
     * @param string $statusDataRows
     *
     * @return Opcache
     */
    public function setStatusDataRows($statusDataRows)
    {
        $this->statusDataRows = $statusDataRows;

        return $this;
    }

    /**
     * Get statusDataRows
     *
     * @return string
     */
    public function getStatusDataRows()
    {
        return $this->statusDataRows;
    }

    /**
     * Set configDataRows
     *
     * @param string $configDataRows
     *
     * @return Opcache
     */
    public function setConfigDataRows($configDataRows)
    {
        $this->configDataRows = $configDataRows;

        return $this;
    }

    /**
     * Get configDataRows
     *
     * @return string
     */
    public function getConfigDataRows()
    {
        return $this->configDataRows;
    }

    /**
     * Set scriptStatusRows
     *
     * @param string $scriptStatusRows
     *
     * @return Opcache
     */
    public function setScriptStatusRows($scriptStatusRows)
    {
        $this->scriptStatusRows = $scriptStatusRows;

        return $this;
    }

    /**
     * Get scriptStatusRows
     *
     * @return string
     */
    public function getScriptStatusRows()
    {
        return $this->scriptStatusRows;
    }

    /**
     * Set scriptStatusCount
     *
     * @param string $scriptStatusCount
     *
     * @return Opcache
     */
    public function setScriptStatusCount($scriptStatusCount)
    {
        $this->scriptStatusCount = $scriptStatusCount;

        return $this;
    }

    /**
     * Get scriptStatusCount
     *
     * @return string
     */
    public function getScriptStatusCount()
    {
        return $this->scriptStatusCount;
    }

    /**
     * Set graphDataSetJson
     *
     * @param string $graphDataSetJson
     *
     * @return Opcache
     */
    public function setGraphDataSetJson($graphDataSetJson)
    {
        $this->graphDataSetJson = $graphDataSetJson;

        return $this;
    }

    /**
     * Get graphDataSetJson
     *
     * @return string
     */
    public function getGraphDataSetJson()
    {
        return $this->graphDataSetJson;
    }

    /**
     * Set humanUsedMemory
     *
     * @param string $humanUsedMemory
     *
     * @return Opcache
     */
    public function setHumanUsedMemory($humanUsedMemory)
    {
        $this->humanUsedMemory = $humanUsedMemory;

        return $this;
    }

    /**
     * Get humanUsedMemory
     *
     * @return string
     */
    public function getHumanUsedMemory()
    {
        return $this->humanUsedMemory;
    }

    /**
     * Set humanFreeMemory
     *
     * @param string $humanFreeMemory
     *
     * @return Opcache
     */
    public function setHumanFreeMemory($humanFreeMemory)
    {
        $this->humanFreeMemory = $humanFreeMemory;

        return $this;
    }

    /**
     * Get humanFreeMemory
     *
     * @return string
     */
    public function getHumanFreeMemory()
    {
        return $this->humanFreeMemory;
    }

    /**
     * Set humanWastedMemory
     *
     * @param string $humanWastedMemory
     *
     * @return Opcache
     */
    public function setHumanWastedMemory($humanWastedMemory)
    {
        $this->humanWastedMemory = $humanWastedMemory;

        return $this;
    }

    /**
     * Get humanWastedMemory
     *
     * @return string
     */
    public function getHumanWastedMemory()
    {
        return $this->humanWastedMemory;
    }

    /**
     * Set usedMemory
     *
     * @param string $usedMemory
     *
     * @return Opcache
     */
    public function setUsedMemory($usedMemory)
    {
        $this->usedMemory = $usedMemory;

        return $this;
    }

    /**
     * Get usedMemory
     *
     * @return string
     */
    public function getUsedMemory()
    {
        return $this->usedMemory;
    }

    /**
     * Set freeMemory
     *
     * @param string $freeMemory
     *
     * @return Opcache
     */
    public function setFreeMemory($freeMemory)
    {
        $this->freeMemory = $freeMemory;

        return $this;
    }

    /**
     * Get freeMemory
     *
     * @return string
     */
    public function getFreeMemory()
    {
        return $this->freeMemory;
    }

    /**
     * Set wastedMemory
     *
     * @param string $wastedMemory
     *
     * @return Opcache
     */
    public function setWastedMemory($wastedMemory)
    {
        $this->wastedMemory = $wastedMemory;

        return $this;
    }

    /**
     * Get wastedMemory
     *
     * @return string
     */
    public function getWastedMemory()
    {
        return $this->wastedMemory;
    }

    /**
     * Set wastedMemoryPercentage
     *
     * @param string $wastedMemoryPercentage
     *
     * @return Opcache
     */
    public function setWastedMemoryPercentage($wastedMemoryPercentage)
    {
        $this->wastedMemoryPercentage = $wastedMemoryPercentage;

        return $this;
    }

    /**
     * Get wastedMemoryPercentage
     *
     * @return string
     */
    public function getWastedMemoryPercentage()
    {
        return $this->wastedMemoryPercentage;
    }

    /**
     * Set d3Scripts
     *
     * @param string $d3Scripts
     *
     * @return Opcache
     */
    public function setD3Scripts($d3Scripts)
    {
        $this->d3Scripts = $d3Scripts;

        return $this;
    }

    /**
     * Get d3Scripts
     *
     * @return string
     */
    public function getD3Scripts()
    {
        return $this->d3Scripts;
    }
}

