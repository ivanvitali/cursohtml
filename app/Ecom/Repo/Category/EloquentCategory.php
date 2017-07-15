<?php
/**
 * Created by PhpStorm.
 * User: web
 * Date: 25/4/17
 * Time: 17:19
 */
    namespace Ecom\Repo\Category;

    use Illuminate\Database\Eloquent\Model;

    class EloquentCategory implements CategoryInterface {

        protected $category;

        public function __construct(Model $category)
        {
            $this->category = $category;
        }

        public function getAllCategories() {

            $query = $this->category;

            $categories = $query->all();

            return $categories;
        }

    }