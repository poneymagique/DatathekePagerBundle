<?php

namespace Datatheke\Bundle\PagerBundle\Pager;

interface PagerInterface
{
    public function getFields();

    public function setCurrentPageNumber($currentPageNumber);

    public function getCurrentPageNumber();

    public function getItemCountPerPageChoices();

    public function setItemCountPerPage($itemCountPerPage);

    public function getItemCountPerPage();

    public function setOrderBy(OrderBy $orderBy = null);

    public function getOrderBy();

    public function setFilter(Filter $filter = null);

    public function getFilter();

    public function getItems();

    public function getPageCount();

    public function getTotalItemCount();

    public function getFirstItemNumber();

    public function getLastItemNumber();

    public function getPreviousPageNumber();

    public function getNextPageNumber();

    public function getCurrentItemCount();
}
