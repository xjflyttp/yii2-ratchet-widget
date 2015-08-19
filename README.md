# yii2-ratchet-widget
    https://github.com/twbs/ratchet


## composer.json
```json
"require": {
    "yii2-ratchet-widget": "~1.0.0"
}
```

## RegisterAssets
### Base
```php
RatchetAsset::register($this);
```
### AndroidTheme
```php
RatchetAndroidAsset::register($this);
```
### IosTheme
```php
RatchetIosAsset::register($this);
```

## Widget TabBar
### Icon
```php
echo TabBar::widget([
    'items' => [
        ['label' => '首页', 'url' => ['shop/index'], 'icon' => 'icon icon-home'],
        ['label' => '最新', 'url' => ['shop/hot'], 'icon' => 'icon icon-search'],
        ['label' => '热门', 'url' => ['shop/hot'], 'icon' => 'icon icon-star-filled'],
        ['label' => '没想好', 'url' => ['shop/hot'], 'icon' => 'icon icon-gear'],
        ['label' => '订单', 'url' => ['profile/order'], 'icon' => 'icon icon-person'],
    ]
]);
```

### Label Only
```php
echo TabBar::widget([
    'items' => [
        ['label' => '首页', 'url' => ['shop/index']],
        ['label' => '最新', 'url' => ['shop/hot']],
        ['label' => '热门', 'url' => ['shop/hot']],
        ['label' => '没想好', 'url' => ['shop/hot']],
        ['label' => '订单', 'url' => ['profile/order']],
    ]
]);
```
