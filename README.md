# 創想知識後臺租賃模板
## 環境需求
1. Laravel > 9.0
1. PHP > 8.1

## 環境配置
1. `vi composer.json`
2. `add`
    ```json
        "repositories": {
            "cpkm/lease": {
                "type": "vcs",
                "url": "git@github.com:cpkm-service/lease.git"
            }
        }
    ```
3. `composer require cpkm-service/lease`
4. `php artisan migrate`

