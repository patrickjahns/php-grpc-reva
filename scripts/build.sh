#!/usr/bin/env bash

protoc  --php_out=./src  --grpc_out=./src --plugin=protoc-gen-grpc=/usr/local/bin/grpc_php_plugin ./api/api.proto