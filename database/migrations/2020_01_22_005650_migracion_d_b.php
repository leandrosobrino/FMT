<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class MigracionDB extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //1 Inserto la columna username que la utilizo como "id" del front, la foto que usara como perfil , el estado (activo o no) y si es admin o no
        Schema::table('users', function (Blueprint $table) {
            $table->string('username')->unique();
            $table->string('foto');
            $table->boolean('estado');
            $table->boolean('esAdmin');
        });
         //2 MEdio de pago
         Schema::create('payments', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('descripcion');
            $table->dateTime('vencimiento');
            $table->double('numero', 8,0);
            $table->double('codigo', 8, 2);
        });
        //3 Compra
        Schema::create('purchases', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->decimal('total', 8, 2);
            $table->dateTime('fechaCompra');
            $table->integer('descuentoPorcentaje');
            $table->string('envio');
            $table->unsignedBigInteger('medioPago_id');
            $table->foreign('medioPago_id')->references('id')->on('payments');
            $table->boolean('estado');
        });
        //4 Producto
        Schema::create('products', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('foto');
            $table->string('nombre');
            $table->string('descripcion');
            $table->boolean('estado');
            $table->decimal('precio', 8, 2);
            $table->integer('stock');
            $table->string('tipoProducto');
        });
        //5 Item tiene FK a producto
        Schema::create('items', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->decimal('precio', 8, 2);
            $table->unsignedBigInteger('tipoProduct_id');
            $table->foreign('tipoProduct_id')->references('id')->on('products');
        });
        //6 Compra_item (tabla intermedia)
        Schema::create('items_purchases', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('compra_id');
            $table->foreign('compra_id')->references('id')->on('purchases');
            $table->unsignedBigInteger('item_id');
            $table->foreign('item_id')->references('id')->on('items');
            $table->integer('descuentoPorcentaje');
        });
        //7 Carrito
        Schema::create('carts', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');
            $table->boolean('estado');
        });
        //8 Carrito_producto (tabla intermedia)
        Schema::create('carts_products', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('carrito_id');
            $table->foreign('carrito_id')->references('id')->on('carts');
            $table->unsignedBigInteger('product_id');
            $table->foreign('product_id')->references('id')->on('products');
            $table->integer('cantidad');
        });
        Schema::create('roles', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nombre');
            $table->boolean('estado');
        });
        Schema::create('funcionalidades', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('descripcion');
            $table->string('menu');
            $table->boolean('estado');
        });
        Schema::create('funcionalidad_rol', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('rol_id');
            $table->foreign('rol_id')->references('id')->on('roles');
            $table->unsignedBigInteger('funcionalidad_id');
            $table->foreign('funcionalidad_id')->references('id')->on('funcionalidades');
            $table->boolean('estado');
        });
        Schema::create('role_users',function(Blueprint $table){
            $table->bigIncrements('id');
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');
            $table->unsignedBigInteger('rol_id');
            $table->foreign('rol_id')->references('id')->on('roles');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
         // Eliminamos primero las tablas intermedias
        // 1 - Detalle_producto
        Schema::dropIfExists('detail_products');
        // 2 - Carrito_producto
        Schema::dropIfExists('carts_products');
        //3 - Compra_items
        Schema::dropIfExists('items_purchases');
        //Como ya no tenemos las TI podemos eliminar las q unicamente otras tablas tenian FK a ellas
        //4 - Carrito
        Schema::dropIfExists('carts');
        //5 - Compra
        Schema::dropIfExists('purchases');
        //8 - Medio de pago
        Schema::dropIfExists('payments');
        //6 -  Item
        Schema::dropIfExists('items');
        //7 - Producto
        Schema::dropIfExists('products');
        //7 - Producto
        Schema::dropIfExists('roles');
        //7 - Producto
        Schema::dropIfExists('funcionalidades');
        //7 - Producto
        Schema::dropIfExists('funcionalidad_rol');
        //7 - Producto
        Schema::dropIfExists('role_users');

        //9 - usuarios esta la dejo comentada, xq es fundamental para el login!!
        //Schema::drop('users');
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('username');
            $table->dropColumn('foto');
            $table->dropColumn('estado');
            $table->dropColumn('esAdmin');
        });

    }
}
