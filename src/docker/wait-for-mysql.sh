#!/bin/sh

set -e

host="$1"
shift
cmd="$@"

timeout=60
elapsed=0

until mysqladmin ping -h"$host" --silent || [ $elapsed -ge $timeout ]; do
  >&2 echo "MySQL is unavailable - sleeping"
  sleep 1
  elapsed=$((elapsed + 1))
done

if [ $elapsed -lt $timeout ]; then
  >&2 echo "MySQL is up - executing command"
  exec $cmd
else
  >&2 echo "MySQL is still down after $timeout seconds - aborting"
  exit 1
fi
