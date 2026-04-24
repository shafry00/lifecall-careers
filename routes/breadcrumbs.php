<?php

use Diglactic\Breadcrumbs\Breadcrumbs;
use Diglactic\Breadcrumbs\Generator as BreadcrumbTrail;

// begin:: admin
Breadcrumbs::for('admin.dashboard.index', function (BreadcrumbTrail $trail) {
    $trail->push('Dashboard', route('admin.dashboard.index'));
});

Breadcrumbs::for('admin.akun.index', function (BreadcrumbTrail $trail) {
    $trail->parent('admin.dashboard.index');

    $trail->push('Akun', route('admin.akun.index'));
});

Breadcrumbs::for('admin.pegawai.index', function (BreadcrumbTrail $trail) {
    $trail->parent('admin.dashboard.index');

    $trail->push('Pegawai', route('admin.pegawai.index'));
});

Breadcrumbs::for('admin.satuan.index', function (BreadcrumbTrail $trail) {
    $trail->parent('admin.dashboard.index');

    $trail->push('Satuan', route('admin.satuan.index'));
});

Breadcrumbs::for('admin.barang.index', function (BreadcrumbTrail $trail) {
    $trail->parent('admin.dashboard.index');

    $trail->push('Barang', route('admin.barang.index'));
});

Breadcrumbs::for('admin.stok_in.index', function (BreadcrumbTrail $trail) {
    $trail->parent('admin.dashboard.index');

    $trail->push('Stok Masuk', route('admin.stok_in.index'));
});

Breadcrumbs::for('admin.stok_in.create', function (BreadcrumbTrail $trail) {
    $trail->parent('admin.stok_in.index');

    $trail->push('Tambah', route('admin.stok_in.create'));
});

Breadcrumbs::for('admin.stok_in.detail', function (BreadcrumbTrail $trail) {
    $trail->parent('admin.stok_in.index');

    $trail->push('Detail', '#');
});

Breadcrumbs::for('admin.stok_out.index', function (BreadcrumbTrail $trail) {
    $trail->parent('admin.dashboard.index');

    $trail->push('Stok Keluar', route('admin.stok_out.index'));
});

Breadcrumbs::for('admin.stok_out.create', function (BreadcrumbTrail $trail) {
    $trail->parent('admin.stok_out.index');

    $trail->push('Tambah', route('admin.stok_out.create'));
});

Breadcrumbs::for('admin.stok_out.detail', function (BreadcrumbTrail $trail) {
    $trail->parent('admin.stok_out.index');

    $trail->push('Detail', '#');
});

Breadcrumbs::for('admin.report_in.index', function (BreadcrumbTrail $trail) {
    $trail->parent('admin.dashboard.index');

    $trail->push('Barang Masuk', route('admin.report_in.index'));
});

Breadcrumbs::for('admin.report_out.index', function (BreadcrumbTrail $trail) {
    $trail->parent('admin.dashboard.index');

    $trail->push('Barang Keluar', route('admin.report_out.index'));
});

Breadcrumbs::for('admin.report_stock.index', function (BreadcrumbTrail $trail) {
    $trail->parent('admin.dashboard.index');

    $trail->push('Stok Barang', route('admin.report_stock.index'));
});
// end:: admin