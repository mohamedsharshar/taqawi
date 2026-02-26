# تحديث الصفحات لدعم Light/Dark Mode

## الألوان المستخدمة:

### Light Mode:
- Background: `bg-white`, `bg-amber-50`, `bg-gray-50`
- Text: `text-gray-900`, `text-gray-700`, `text-gray-600`
- Borders: `border-gray-200`, `border-gray-300`
- Cards: `bg-white` with `shadow-sm`
- Accent: `text-yellow-600`, `bg-yellow-100`

### Dark Mode:
- Background: `dark:bg-[#1c1813]`, `dark:bg-[#221e1a]`
- Text: `dark:text-white`, `dark:text-gray-300`, `dark:text-gray-400`
- Borders: `dark:border-[#332e27]`
- Cards: `dark:bg-[#221e1a]`
- Accent: `dark:text-yellow-500`, `dark:bg-yellow-500/10`

## Pattern للتحديث:
```jsx
// Old
className="bg-[#221e1a] text-white border-[#332e27]"

// New
className="bg-white dark:bg-[#221e1a] text-gray-900 dark:text-white border-gray-200 dark:border-[#332e27]"
```
