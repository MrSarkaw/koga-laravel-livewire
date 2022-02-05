<?php

use Illuminate\Support\Facades\Route;

Route::get("/","Login")->name("login");

Route::middleware(['auth',"isAdmin"])->group(function () {
    // users
    route::get("admin/user","Admin\User\Index")->name("admin.user");
    route::get("admin/user/add","Admin\User\Newuser")->name("admin.user.add");
    route::get("admin/user/update/{id}","Admin\User\Updateuser")->name("admin.user.updateuser");

    // categories
    route::get("admin/category","Admin\Category\Index")->name("admin.category");
    route::get("admin/addcategory","Admin\Category\Addcategory")->name("admin.category.add");
    route::get("admin/updatecategory/{id}","Admin\Category\Uodatecategory")->name("admin.category.update");

    // unit
    route::get("admin/unit","Admin\Unit\Index")->name("admin.unit");
    route::get("admin/addunit","Admin\Unit\Newunit")->name("admin.unit.add");
    route::get("admin/updateunit/{id}","Admin\Unit\Updateunit")->name("admin.unit.update");

    // items
    route::get("admin/item","Admin\Items\Index")->name("admin.item");
    route::get("admin/additem","Admin\Items\Newitem")->name("admin.item.add");
    route::get("admin/updateitem/{id}","Admin\Items\Updateitem")->name("admin.item.update");

      // contact
    route::get("admin/contact","Admin\Contact\Index")->name("admin.contact");
    route::get("admin/contact/store","Admin\Contact\store")->name("admin.contact.add");
    route::get("admin/contact/{id}","Admin\Contact\Update")->name("admin.contact.update");

      // transaction
    route::get("admin/transaction","Admin\Transaction\Index")->name("admin.transaction");
    route::get("admin/transaction/store","Admin\Transaction\store")->name("admin.transaction.add");
    route::get("admin/transaction/show/{id}","Admin\Transaction\ShowTransaction")->name("admin.transaction.show");
    route::get("admin/transaction/{id}","Admin\Transaction\Updatetransaction")->name("admin.transaction.update");
    
});



Route::middleware(['auth'])->group(function () {
   // transaction
   route::get("user/transaction","User\Transaction\UserIndex")->name("user.transaction");
   route::get("user/transaction/userstore","User\Transaction\UserStore")->name("user.transaction.add");
   route::get("user/transaction/ushow/{id}","User\Transaction\UserShowTransaction")->name("user.transaction.show");

    // items
    route::get("user/item","User\Items\Userindex")->name("user.item");
    route::get("user/additem","User\Items\Userstore")->name("user.item.add");

});