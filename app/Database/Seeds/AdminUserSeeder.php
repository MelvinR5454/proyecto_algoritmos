<?php
namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class AdminUserSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'name' => 'Administrador',
                'email' => 'admin@sistema.com', 
                'password' => password_hash('admin123', PASSWORD_DEFAULT),
                'active' => true,
                'is_admin' => true,
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Profesor Demo',
                'email' => 'profesor@escuela.com',
                'password' => password_hash('profesor123', PASSWORD_DEFAULT),
                'active' => true,
                'is_admin' => false,
                'created_at' => date('Y-m-d H:i:s')
            ]
        ];

        $this->db->table('users')->insertBatch($data);
        echo "Usuarios creados:\n";
        echo "Admin: admin@sistema.com / admin123\n";
        echo "Profesor: profesor@escuela.com / profesor123\n";
    }
}
