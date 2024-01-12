// OnlineStore.php
require_once 'Product.php';
require_once 'Customer.php';
require_once 'Order.php';
require_once 'ShoppingCart.php';

// Create products
$product1 = new Product("Laptop", 1200.0);
$product2 = new Product("Headphones", 99.99);

// Create customers
$customer = new Customer("John Doe", "john@example.com");

// Create shopping cart
$cart = new ShoppingCart();
$cart->addItem($product1);
$cart->addItem($product2);

// Create order
$order = new Order(1, $cart->getItems());

// Display order information
echo "Order Information:\n";
echo "Order ID: " . $order->getOrderId() . "\n";
echo "Customer: " . $customer->getName() . "\n";
echo "Total: $" . $order->calculateTotal() . "\n";
echo "Products:\n";

foreach ($order->getProducts() as $product) {
    echo "- " . $product->getName() . ": $" . $product->getPrice() . "\n";
}
