curl https://sandbox.interswitchng.com/passport/oauth/token \
-H "Authorization: Basic SUtJQUIyM0E0RTI3NTY2MDVDMUFCQzMzQ0UzQzI4N0UyNzI2N0Y2NjBENjE6c2VjcmV0" \
-H "Content-Type: application/x-www-form-urlencoded" \
-D '{
	"grant_type": "client_credentials"
}'
-X POST

curl https://payment-service.k8.isw.la/api/v3/purchases \
-H "Authorization: Bearer <token>" \
-H "Content-Type: application/json" \
-d '{
    "customerId": "1407002510",
    "amount": "20000",
    "transactionRef": "12n345mmm0km655",
    "currency": "NGN",
    "authData": "G3cf/VTtAHCdHZNxc5GXWRI8z5P0goL2amXWDVFgb6D3XK/QMtZW90TYdl5zffDCNpiZThJzk0+eEU/Y/aYS6fyIOpQZGFrOr8hmvx5869sl2kr5u8qjnM7q5b4ZnTqdKDLtNxr3Qr7anj6YLpox1FOsiyT26mktXL+7SFOaZ15NMtne1z4xrj4R2SndowI/Znsapo7Gfzvp+L7XJyQ8kLYYRk3INjvmRPPQoJg1R0Nnh6EQE3ldIdwylB7GKtr6a71N/yCd4ZtyIcqq1ZNzdWcZyy5eEBAlDIxuECdBqH6hRq2/RbkfARqidNN4Kq0WviSRaRYGbiNjl2W9pNcM8g=="
}' 
-X POST