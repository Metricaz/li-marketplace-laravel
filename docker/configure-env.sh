#!/bin/bash

if docker network inspect boracomprar-network &>/dev/null; then
  echo "Network boracomprar-network already exists."
else
  docker network create boracomprar-network
  echo "Network boracomprar-network created."
fi
