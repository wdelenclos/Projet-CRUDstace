<?php
namespace Controller;

use model\PageRepository;

/**
 * Class PageController
 * @author Yann Le Scouarnec <yann.le-scouarnec@hetic.net>
 * @package Controller
 */
class PageController
{
    /**
     * PageController constructor.
     * @param \PDO $PDO
     */
    public function __construct(\PDO $PDO)
    {
        $this->repository = new PageRepository($PDO);
    }

    /**
     *
     */
    public function ajoutAction()
	{
	}

    /**
     *
     */
    public function supprimerAction()
	{
	}

    /**
     *
     */
    public function modifierAction()
	{
	}

    /**
     *
     */
    public function detailsAction()
	{
	}

    /**
     *
     */
    public function listeAction()
	{
	}

    /**
     *
     */
    public function displayAction()
	{
	}
}