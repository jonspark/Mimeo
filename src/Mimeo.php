<?php
namespace JonSPark\Mimeo;

/**
 *
 */
class Mimeo
{
    protected $articles;

    /**
     * Create a new Mimeo Instance
     */
    public function __construct(
        RepositoryInterface $articles
    ) {
        $this->articles = $articles;
    }
}
