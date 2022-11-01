curl https://sandbox.interswitchng.com/passport/oauth/token \
-H "Authorization: Basic SUtJQUIyM0E0RTI3NTY2MDVDMUFCQzMzQ0UzQzI4N0UyNzI2N0Y2NjBENjE6c2VjcmV0" \
-H "Content-Type: application/x-www-form-urlencoded" \
-D '{
	"grant_type": "client_credentials"
}'
-X POST