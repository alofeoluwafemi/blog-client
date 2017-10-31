<?php
namespace App\Http\Contracts;

interface Blog
{
    /**
     * Fetch all articles
     * @return mixed
     */
    public function all();

    /**
     * Fetch an article using id
     * @param $id
     * @return mixed
     */
    public function get($id);

    /**
     * Method to edit an article
     * @param $id
     * @return mixed
     */
    public function edit($id);

    /**
     * Method to delete an article
     * @param $id
     * @return mixed
     */
    public function delete($id);

    /**
     * Add comment to an article
     * @param $id
     * @return mixed
     */
    public function comment($id);
}