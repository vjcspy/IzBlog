# IzBlog

#View:
- Mỗi view sử dụng đều cần khai báo trong Service blogView để có thể sử dụng Menu
- View được set vào theme không bằng string mà bằng instace của view nhưng 1 điểm chú ý là data truyền vào view lại
không nằm ở instance view mà nằm trong layout xml. Cái này cần phải sửa lại là ngoài data ở trong xml như izAdmin thì data có thể được lấy
từ instance => áp dụng trong trường hợp menu của 1 view như post_detail và layout default.