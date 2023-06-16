#!/bin/bash

# MySQL Database Credentials
DB_HOST="localhost"
DB_USER="root"
DB_PASS="C1sc0123@"
DB_NAME="mise"

# Fetch the FQDN from the scheduler table
query1="SELECT fqdn from scheduler WHERE scheduler = 'yes' ORDER by id desc LIMIT 1 "
fqdn=$(mysql -h $DB_HOST -u $DB_USER -p$DB_PASS -D $DB_NAME -se "$query1")

# Select the ID from deployments table where FQDN matches
query2="SELECT id FROM deployments WHERE fqdn = '$fqdn'"
id=$(mysql -h $DB_HOST -u $DB_USER -p$DB_PASS -D $DB_NAME -se "$query2")

# Print the ID
echo "ID: $id"
