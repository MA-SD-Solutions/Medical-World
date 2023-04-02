<?php
use App\Models\User;
use App\Models\Role;
use App\Models\Permission;
use Diglactic\Breadcrumbs\Breadcrumbs;
use Diglactic\Breadcrumbs\Generator as BreadcrumbTrail;

Breadcrumbs::for('dashboard', function (BreadcrumbTrail $trail): void {
    $trail->push('Dashboard', route('dashboard'));
});
//============================= Users/Profile ============================
Breadcrumbs::for('users.index', function (BreadcrumbTrail $trail): void {
    $trail->parent('dashboard');
    $trail->push('Users', route('users.index'));
});

Breadcrumbs::for('users.edit', function (BreadcrumbTrail $trail , User $user): void {
    $trail->parent('users.index');
    $trail->push('Edit User', route('users.edit', $user));
});

Breadcrumbs::for('users.show', function (BreadcrumbTrail $trail , User $user): void {
    $trail->parent('users.index');
    $trail->push('edit user', route('users.show', $user));
});

Breadcrumbs::for('addUser', function (BreadcrumbTrail $trail): void {
    $trail->parent('users.index');
    $trail->push('Add User', route('addUser'));
});

Breadcrumbs::for('profile', function (BreadcrumbTrail $trail): void {
    $trail->parent('dashboard');
    $trail->push('Profile', route('profile'));
});

Breadcrumbs::for('editProfile', function (BreadcrumbTrail $trail , $profileID): void {
    $trail->parent('profile');
    $trail->push('Edit Profile', route('editProfile', $profileID));
});
//============ ROLES =======================
Breadcrumbs::for('index.roles', function (BreadcrumbTrail $trail): void {
    $trail->parent('dashboard');
    $trail->push('Roles', route('index.roles'));
});

Breadcrumbs::for('roles.create', function (BreadcrumbTrail $trail): void {
    $trail->parent('index.roles');
    $trail->push('Create Role', route('roles.create'));
});

Breadcrumbs::for('roles.show', function (BreadcrumbTrail $trail , $roleId): void {
    $trail->parent('index.roles');
    $trail->push('Show Role', route('roles.show', $roleId));
});

Breadcrumbs::for('roles.edit', function (BreadcrumbTrail $trail , $roleId): void {
    $trail->parent('index.roles');
    $trail->push('Edit Role', route('roles.edit', $roleId));
});

//============ Permissions =======================

Breadcrumbs::for('index.permissions', function (BreadcrumbTrail $trail): void {
    $trail->parent('dashboard');
    $trail->push('Permissions', route('index.permissions'));
});

// Breadcrumbs::for('permissions.create', function (BreadcrumbTrail $trail): void {
//     $trail->parent('index.permissions');
//     $trail->push('Create Permissions', route('permissions.create'));
// });

Breadcrumbs::for('permissions.show', function (BreadcrumbTrail $trail , $permissionId): void {
    $trail->parent('index.permissions');
    $trail->push('Show Permissions', route('permissions.show', $permissionId));
});

// Breadcrumbs::for('permissions.edit', function (BreadcrumbTrail $trail , $permissionId): void {
//     $trail->parent('index.permissions');
//     $trail->push('Edit Permission', route('permissions.edit', $permissionId));
// });

//============ Website =======================

// Breadcrumbs::for('index.website', function (BreadcrumbTrail $trail): void {
//     $trail->parent('dashboard');
//     $trail->push('Website', route('index.website'));
// });

Breadcrumbs::for('index.website', function (BreadcrumbTrail $trail): void {
    $trail->parent('dashboard');
    $trail->push('Edit Website', route('index.website'));
});

//============ AboutUs =======================

// Breadcrumbs::for('index.website', function (BreadcrumbTrail $trail): void {
//     $trail->parent('dashboard');
//     $trail->push('Website', route('index.website'));
// });

Breadcrumbs::for('index.aboutUs', function (BreadcrumbTrail $trail): void {
    $trail->parent('dashboard');
    $trail->push('Edit aboutUs', route('index.aboutUs'));
});

//============ Products =======================

Breadcrumbs::for('products.index', function (BreadcrumbTrail $trail): void {
    $trail->parent('dashboard');
    $trail->push('Products', route('products.index'));
});
Breadcrumbs::for('products.create', function (BreadcrumbTrail $trail): void {
    $trail->parent('products.index');
    $trail->push('Create Product', route('products.create'));
});
Breadcrumbs::for('products.show', function (BreadcrumbTrail $trail , $id): void {
    $trail->parent('products.index');
    $trail->push('show product', route('products.show', $id));
});

Breadcrumbs::for('products.edit', function (BreadcrumbTrail $trail , $id): void {
    $trail->parent('products.index');
    $trail->push('edit product', route('products.edit', $id));
});

//============ Services =======================

Breadcrumbs::for('services.index', function (BreadcrumbTrail $trail): void {
    $trail->parent('dashboard');
    $trail->push('Services', route('services.index'));
});
Breadcrumbs::for('services.create', function (BreadcrumbTrail $trail): void {
    $trail->parent('services.index');
    $trail->push('Create Service', route('services.create'));
});
Breadcrumbs::for('services.show', function (BreadcrumbTrail $trail , $id): void {
    $trail->parent('services.index');
    $trail->push('show service', route('services.show', $id));
});
Breadcrumbs::for('services.edit', function (BreadcrumbTrail $trail , $id): void {
    $trail->parent('services.index');
    $trail->push('edit service', route('services.edit', $id));
});


//============ Images =======================

Breadcrumbs::for('images.index', function (BreadcrumbTrail $trail): void {
    $trail->parent('dashboard');
    $trail->push('Images', route('images.index'));
});
Breadcrumbs::for('images.create', function (BreadcrumbTrail $trail): void {
    $trail->parent('images.index');
    $trail->push('Create Image', route('images.create'));
});
Breadcrumbs::for('images.show', function (BreadcrumbTrail $trail , $id): void {
    $trail->parent('images.index');
    $trail->push('show Image', route('images.show', $id));
});
Breadcrumbs::for('images.edit', function (BreadcrumbTrail $trail , $id): void {
    $trail->parent('images.index');
    $trail->push('edit Image', route('images.edit', $id));
});

//============ Carts =======================

Breadcrumbs::for('carts.index', function (BreadcrumbTrail $trail): void {
    $trail->parent('dashboard');
    $trail->push('Carts', route('carts.index'));
});

//============ Website =======================

Breadcrumbs::for('website.home', function (BreadcrumbTrail $trail): void {
    // $trail->parent('Website');
    $trail->push('Home', route('website.home'));
});

Breadcrumbs::for('website.aboutUs', function (BreadcrumbTrail $trail): void {
    $trail->parent('offers.index');
    $trail->push('aboutUs', route('website.aboutUs'));
});

Breadcrumbs::for('website.services', function (BreadcrumbTrail $trail): void {
    $trail->parent('Home');
    $trail->push('services', route('website.services'));
});

//============ Contact =======================

Breadcrumbs::for('contact.index', function (BreadcrumbTrail $trail): void {
    $trail->parent('dashboard');
    $trail->push('Contacts', route('contact.index'));
});

//============ offer =======================

Breadcrumbs::for('offers.index', function (BreadcrumbTrail $trail): void {
    $trail->parent('dashboard');
    $trail->push('Offers', route('offers.index'));
});

Breadcrumbs::for('offers.create', function (BreadcrumbTrail $trail): void {
    $trail->parent('dashboard');
    $trail->push('Offers', route('offers.create'));
});

Breadcrumbs::for('offers.show', function (BreadcrumbTrail $trail , $id): void {
    $trail->parent('offers.index');
    $trail->push('show Offer', route('offers.show', $id));
});
