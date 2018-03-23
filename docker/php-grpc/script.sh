#!/usr/bin/env bash
apt-get update
apt-get install -y build-essential autoconf libtool pkg-config git

cd /root
git clone -b $(curl -L https://grpc.io/release) https://github.com/grpc/grpc
cd grpc
git submodule update --init

# Install grpc
pecl install grpc
echo "extension=grpc.so" > 20-grpc.ini

# Install protobuf
pecl install protobuf
echo "extension=protobuf.so" > 20-protobuf.ini

# Install protobuf compiler

# Install Protoc Plugin
make grpc_php_plugin
make install

# Install Composer
curl -sS https://getcomposer.org/installer | php
mv composer.phar /usr/local/bin/composer