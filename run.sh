#!/bin/bash
(sleep 1 && open http://localhost:8888) &
php -S localhost:8888
