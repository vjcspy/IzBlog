# Vấn đề thư mục:
- Nếu view là layout_share thì sẽ nằm trong thư mục views.
- Nếu là view của 1 layout nào đó thì nằm trong thư mục views/layout_name/view_name.blade.php

# Khác với admin thì mỗi một layout có 1 view và được quy định luôn cách đặt tên và vị trí thư mục thì ở frontend
1 layout có thể có nhiều view và ngược lại. Từ đó các view được set vào không phải là view_name nữa mà truyền vào bằng instance View
kế thừa từ ViewAbstract
