خلاصه  سیستم مدیریت کاربران 
🗂️ مراحل اصلی:
1. Migration
اضافه کردن فیلدهای جدید به جدول users: phone, address, avatar, role, is_active

2. Model
به روزرسانی fillable در User model

3. Controller
UserController با 8 متد: index, create, store, show, edit, update, destroy, profile, updateProfile

4. Routes
Resource routes برای users

Profile routes

5. Layout
user-layout.blade.php با Bootstrap و RTL

6. Views (5 فایل)
index.blade.php - لیست کاربران

create.blade.php - افزودن کاربر

edit.blade.php - ویرایش کاربر

show.blade.php - نمایش جزئیات

profile.blade.php - پروفایل کاربر

7. Seeder
UserSeeder با 3 کاربر نمونه (admin, operator, user)

 قابلیت‌های سیستم:
مدیریت کاربران: CRUD کامل

نقش‌ها: admin, operator, user

آپلود آواتار: ذخیره در storage

اعتبارسنجی: validation کامل

رابط کاربری: Bootstrap RTL

صفحه‌بندی: pagination

پیام‌های موفقیت: flash messages

اطلاعات ورود:

mailto:admin@example.com / 123456

mailto:operator@example.com / 123456

mailto:user@example.com / 123456