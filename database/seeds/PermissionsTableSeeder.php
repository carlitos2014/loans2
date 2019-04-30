<?php

use Illuminate\Database\Seeder;

use Caffeinated\Shinobi\Models\Permission;

class PermissionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Users
        Permission::create([
            'name'          => 'Creación de roles',
            'slug'          => 'users.create',
            'description'   => 'Podría crear nuevos roles en el sistema',
        ]);

        Permission::create([
            'name'          => 'Navegar usuarios',
            'slug'          => 'users.index',
            'description'   => 'Lista y navega todos los usuarios del sistema',
        ]);

        Permission::create([
            'name'          => 'Ver detalle de usuario',
            'slug'          => 'users.show',
            'description'   => 'Ve en detalle cada usuario del sistema',            
        ]);
        
        Permission::create([
            'name'          => 'Edición de usuarios',
            'slug'          => 'users.edit',
            'description'   => 'Podría editar cualquier dato de un usuario del sistema',
        ]);
        
        Permission::create([
            'name'          => 'Eliminar usuario',
            'slug'          => 'users.destroy',
            'description'   => 'Podría eliminar cualquier usuario del sistema',      
        ]);

        //Roles
        Permission::create([
            'name'          => 'Navegar roles',
            'slug'          => 'roles.index',
            'description'   => 'Lista y navega todos los roles del sistema',
        ]);

        Permission::create([
            'name'          => 'Ver detalle de un rol',
            'slug'          => 'roles.show',
            'description'   => 'Ve en detalle cada rol del sistema',            
        ]);
        
        Permission::create([
            'name'          => 'Creación de roles',
            'slug'          => 'roles.create',
            'description'   => 'Podría crear nuevos roles en el sistema',
        ]);
        
        Permission::create([
            'name'          => 'Edición de roles',
            'slug'          => 'roles.edit',
            'description'   => 'Podría editar cualquier dato de un rol del sistema',
        ]);
        
        Permission::create([
            'name'          => 'Eliminar roles',
            'slug'          => 'roles.destroy',
            'description'   => 'Podría eliminar cualquier rol del sistema',      
        ]);

        //Roles
        Permission::create([
            'name'          => 'Navegar productos',
            'slug'          => 'products.index',
            'description'   => 'Lista y navega todos los productos del sistema',
        ]);

        Permission::create([
            'name'          => 'Ver detalle de un producto',
            'slug'          => 'products.show',
            'description'   => 'Ve en detalle cada producto del sistema',            
        ]);
        
        Permission::create([
            'name'          => 'Creación de productos',
            'slug'          => 'products.create',
            'description'   => 'Podría crear nuevos productos en el sistema',
        ]);
        
        Permission::create([
            'name'          => 'Edición de productos',
            'slug'          => 'products.edit',
            'description'   => 'Podría editar cualquier dato de un producto del sistema',
        ]);
        
        Permission::create([
            'name'          => 'Eliminar productos',
            'slug'          => 'products.destroy',
            'description'   => 'Podría eliminar cualquier producto del sistema',      
        ]);

        //Barrios
        Permission::create([
            'name'          => 'Navegar barrios',
            'slug'          => 'barrios.index',
            'description'   => 'Lista y navega todos los barrios del sistema',
        ]);

        Permission::create([
            'name'          => 'Ver detalle de un barrio',
            'slug'          => 'barrios.show',
            'description'   => 'Ve en detalle cada barrio del sistema',            
        ]);
        
        Permission::create([
            'name'          => 'Creación de barrios',
            'slug'          => 'barrios.create',
            'description'   => 'Podría crear nuevos barrios en el sistema',
        ]);
        
        Permission::create([
            'name'          => 'Edición de barrios',
            'slug'          => 'barrios.edit',
            'description'   => 'Podría editar cualquier dato de un barrio del sistema',
        ]);
        
        Permission::create([
            'name'          => 'Eliminar barrios',
            'slug'          => 'barrios.destroy',
            'description'   => 'Podría eliminar cualquier barrio del sistema',      
        ]);

        //Ciudades
        Permission::create([
            'name'          => 'Navegar ciudades',
            'slug'          => 'ciudades.index',
            'description'   => 'Lista y navega todos los ciudades del sistema',
        ]);

        Permission::create([
            'name'          => 'Ver detalle de un ciudad',
            'slug'          => 'ciudades.show',
            'description'   => 'Ve en detalle cada ciudad del sistema',            
        ]);
        
        Permission::create([
            'name'          => 'Creación de ciudades',
            'slug'          => 'ciudades.create',
            'description'   => 'Podría crear nuevos ciudades en el sistema',
        ]);
        
        Permission::create([
            'name'          => 'Edición de ciudades',
            'slug'          => 'ciudades.edit',
            'description'   => 'Podría editar cualquier dato de un ciudad del sistema',
        ]);
        
        Permission::create([
            'name'          => 'Eliminar ciudades',
            'slug'          => 'ciudades.destroy',
            'description'   => 'Podría eliminar cualquier ciudad del sistema',      
        ]);

        //abonos
        Permission::create([
            'name'          => 'Navegar clientes',
            'slug'          => 'clientes.index',
            'description'   => 'Lista y navega todos los clientes del sistema',
        ]);

        Permission::create([
            'name'          => 'Ver detalle de un cliente',
            'slug'          => 'clientes.show',
            'description'   => 'Ve en detalle cada cliente del sistema',            
        ]);
        
        Permission::create([
            'name'          => 'Creación de clientes',
            'slug'          => 'clientes.create',
            'description'   => 'Podría crear nuevos clientes en el sistema',
        ]);
        
        Permission::create([
            'name'          => 'Edición de clientes',
            'slug'          => 'clientes.edit',
            'description'   => 'Podría editar cualquier dato de un cliente del sistema',
        ]);
        
        Permission::create([
            'name'          => 'Eliminar clientes',
            'slug'          => 'clientes.destroy',
            'description'   => 'Podría eliminar cualquier cliente del sistema',      
        ]);

        //FormaPagos
        Permission::create([
            'name'          => 'Navegar Formas de Pago',
            'slug'          => 'formaPagos.index',
            'description'   => 'Lista y navega todos los formas de pago del sistema',
        ]);

        Permission::create([
            'name'          => 'Ver detalle de un forma de pago',
            'slug'          => 'formaPagos.show',
            'description'   => 'Ve en detalle cada forma de pago del sistema',            
        ]);
        
        Permission::create([
            'name'          => 'Creación de Formas de pago',
            'slug'          => 'formaPagos.create',
            'description'   => 'Podría crear nuevos Formas de pago en el sistema',
        ]);
        
        Permission::create([
            'name'          => 'Edición de Formas de pago',
            'slug'          => 'formaPagos.edit',
            'description'   => 'Podría editar cualquier dato de un forma de pago del sistema',
        ]);
        
        Permission::create([
            'name'          => 'Eliminar Formas de pago',
            'slug'          => 'formaPagos.destroy',
            'description'   => 'Podría eliminar cualquier forma de pago del sistema',      
        ]);

        //Abonos
        Permission::create([
            'name'          => 'Navegar abonos',
            'slug'          => 'abonos.index',
            'description'   => 'Lista y navega todos los abonos del sistema',
        ]);

        Permission::create([
            'name'          => 'Ver detalle de un abono',
            'slug'          => 'abonos.show',
            'description'   => 'Ve en detalle cada abono del sistema',            
        ]);
        
        Permission::create([
            'name'          => 'Creación de abonos',
            'slug'          => 'abonos.create',
            'description'   => 'Podría crear nuevos abonos en el sistema',
        ]);
        
        Permission::create([
            'name'          => 'Edición de abonos',
            'slug'          => 'abonos.edit',
            'description'   => 'Podría editar cualquier dato de un abono del sistema',
        ]);
        
        Permission::create([
            'name'          => 'Eliminar abonos',
            'slug'          => 'abonos.destroy',
            'description'   => 'Podría eliminar cualquier abono del sistema',      
        ]);

        //Plazos
        Permission::create([
            'name'          => 'Navegar plazos',
            'slug'          => 'plazos.index',
            'description'   => 'Lista y navega todos los plazos del sistema',
        ]);

        Permission::create([
            'name'          => 'Ver detalle de un plazo',
            'slug'          => 'plazos.show',
            'description'   => 'Ve en detalle cada plazo del sistema',            
        ]);
        
        Permission::create([
            'name'          => 'Creación de plazos',
            'slug'          => 'plazos.create',
            'description'   => 'Podría crear nuevos plazos en el sistema',
        ]);
        
        Permission::create([
            'name'          => 'Edición de plazos',
            'slug'          => 'plazos.edit',
            'description'   => 'Podría editar cualquier dato de un plazo del sistema',
        ]);
        
        Permission::create([
            'name'          => 'Eliminar plazos',
            'slug'          => 'plazos.destroy',
            'description'   => 'Podría eliminar cualquier plazo del sistema',      
        ]);

        //Parametros
        Permission::create([
            'name'          => 'Navegar parametros',
            'slug'          => 'parametros.index',
            'description'   => 'Lista y navega todos los parametros del sistema',
        ]);

        Permission::create([
            'name'          => 'Ver detalle de un parametro',
            'slug'          => 'parametros.show',
            'description'   => 'Ve en detalle cada parametro del sistema',            
        ]);
        
        Permission::create([
            'name'          => 'Creación de parametros',
            'slug'          => 'parametros.create',
            'description'   => 'Podría crear nuevos parametros en el sistema',
        ]);
        
        Permission::create([
            'name'          => 'Edición de parametros',
            'slug'          => 'parametros.edit',
            'description'   => 'Podría editar cualquier dato de un parametro del sistema',
        ]);
        
        Permission::create([
            'name'          => 'Eliminar parametros',
            'slug'          => 'parametros.destroy',
            'description'   => 'Podría eliminar cualquier parametro del sistema',      
        ]);

        //Tasas
        Permission::create([
            'name'          => 'Navegar tasas',
            'slug'          => 'tasas.index',
            'description'   => 'Lista y navega todos los tasas del sistema',
        ]);

        Permission::create([
            'name'          => 'Ver detalle de un tasa',
            'slug'          => 'tasas.show',
            'description'   => 'Ve en detalle cada tasa del sistema',            
        ]);
        
        Permission::create([
            'name'          => 'Creación de tasas',
            'slug'          => 'tasas.create',
            'description'   => 'Podría crear nuevos tasas en el sistema',
        ]);
        
        Permission::create([
            'name'          => 'Edición de tasas',
            'slug'          => 'tasas.edit',
            'description'   => 'Podría editar cualquier dato de un tasa del sistema',
        ]);
        
        Permission::create([
            'name'          => 'Eliminar tasas',
            'slug'          => 'tasas.destroy',
            'description'   => 'Podría eliminar cualquier tasa del sistema',      
        ]);

        //Config
        Permission::create([
            'name'          => 'Ver Configuraciones',
            'slug'          => 'config',
            'description'   => 'Podra ver las configuraciones del sistema',
        ]);
    }
}
