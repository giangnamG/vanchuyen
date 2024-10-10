<?php
require_once 'config/db.config.php';

/**
 * Bắt đầu output buffering
 */
ob_start();

/**
 * Router
 */
$uri = $_SERVER['REQUEST_URI'];
/**
 * Xác định các route và tương ứng với file template cần load
 */
$routeMap = [
    "/" => 'resources/views/home.php',
    "/order" => 'resources/views/order/index.php',
    "/order/create" => 'resources/views/order/create.php',
    "/order/view/123" => 'resources/views/order/view.php',
    "/user/partner/list" => 'resources/views/users/admin/list/organization.php',
    "/user/staff/list" => 'resources/views/users/admin/list/driver_staff.php',
];

/**
 * Kiểm tra xem URL có nằm trong route map không
 */
if (array_key_exists($uri, $routeMap)) {
    // Bao gồm file template tương ứng
    include $routeMap[$uri];
} else {
    // Nếu không tìm thấy route, hiển thị trang 404
    echo "<h1>404 - Page not found</h1>";
}

/**
 * Lấy nội dung của template và lưu vào biến $content
 */
$content = ob_get_clean();

/**
 * Bao gồm layout và tiêm nội dung từ template vào layout
 */
include 'resources/layout.php';
?>
