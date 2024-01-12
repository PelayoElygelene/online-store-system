// Order.php
class Order {
    private $orderId;
    private $products;

    public function __construct($orderId, $products) {
        $this->orderId = $orderId;
        $this->products = $products;
    }

    public function getOrderId() {
        return $this->orderId;
    }

    public function getProducts() {
        return $this->products;
    }

    public function calculateTotal() {
        $total = 0;
        foreach ($this->products as $product) {
            $total += $product->getPrice();
        }
        return $total;
    }
}
