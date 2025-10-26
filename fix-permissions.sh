#!/bin/bash

echo "=== SOLUCIONANDO PROBLEMAS DE PERMISOS ==="

cd /opt/lampp/htdocs/taskapp/sistema-tareas-escolares

echo "Usuario actual: $(whoami)"

echo "Deteniendo Apache temporalmente..."
sudo /opt/lampp/lampp stopapache

echo "Dando permisos a carpetas..."
sudo chmod -R 775 writable/
sudo chmod -R 775 public/assets/

echo "Cambiando propietarios..."
sudo chown -R $USER:www-data writable/
sudo chown -R $USER:www-data public/assets/

echo "Configurando cache..."
sudo mkdir -p writable/cache
sudo chmod -R 775 writable/cache/
sudo chown -R $USER:www-data writable/cache/

echo "Limpiando cache..."
sudo rm -rf writable/cache/*

echo "Verificando permisos..."
echo "=== Permisos de writable/ ==="
ls -la writable/
echo "=== Permisos de cache/ ==="
ls -la writable/cache/

echo "Reiniciando Apache..."
sudo /opt/lampp/lampp startapache

echo "PERMISOS CONFIGURADOS CORRECTAMENTE"
echo "URL de prueba: http://localhost/tareas"
