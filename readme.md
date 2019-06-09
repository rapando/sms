# Installation

1. Run

```bash
$ composer install
```

2. Copy `envexample` to .`env` and provide the values from [AfricasTalking](https://account.africastalking.com)

# Sample Run

```bash
curl -X POST \
  http://localhost \
  -H 'Content-Type: application/json' \
  -d '{
	"receipients": "2547XXXXXXX",
	"message": "Hello World"
}'
```
