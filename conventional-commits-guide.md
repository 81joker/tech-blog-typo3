# Conventional Commits — دليل شامل

> مرجع سريع لكتابة رسائل Git Commit احترافية

---

## 📖 ما هي Conventional Commits؟

**Conventional Commits** هي اتفاقية معيارية لكتابة رسائل commit في Git، تجعل تاريخ المشروع واضحاً ومنظماً. تستخدمها الشركات الاحترافية في أوروبا (خاصة ألمانيا والنمسا) وتُعتبر معياراً في بيئات العمل الحديثة.

---

## 🎯 لماذا نستخدمها؟

### ❌ بدون Conventional Commits

```
update stuff
fixed bug
changes
asdf
final version
final version 2
```

### ✅ مع Conventional Commits

```
feat: add blog post search
fix: resolve email validation error
docs: update installation guide
refactor: extract repository logic
```

الفرق واضح — commits منظمة تعكس احترافيتك كمطوّر.

---

## 🏗️ البنية الأساسية

```
<type>(<scope>): <short description>

<optional body>

<optional footer>
```

- `<type>` → نوع التغيير (مطلوب)
- `<scope>` → الجزء المتأثر (اختياري)
- `<description>` → وصف مختصر (مطلوب)

---

## 📋 أنواع Commits الأساسية

| النوع | المعنى | مثال |
|------|--------|------|
| `feat` | ميزة جديدة (feature) | `feat: add blog post search` |
| `fix` | إصلاح خطأ (bug fix) | `fix: correct date format in posts` |
| `docs` | تعديل التوثيق فقط | `docs: update README with DDEV steps` |
| `style` | تنسيق الكود بدون تغيير المنطق | `style: format TypoScript files` |
| `refactor` | إعادة هيكلة بدون ميزة أو إصلاح | `refactor: extract repository logic` |
| `test` | إضافة أو تعديل اختبارات | `test: add unit tests for BlogController` |
| `chore` | مهام صيانة عامة | `chore: update TYPO3 to 13.4.5` |
| `perf` | تحسين الأداء | `perf: cache blog post queries` |
| `build` | تغييرات نظام البناء | `build: update composer.json` |
| `ci` | تغييرات CI/CD | `ci: add GitHub Actions workflow` |
| `revert` | التراجع عن commit سابق | `revert: undo feature X` |

---

## 🔍 استخدام Scope

الـ `scope` يحدد الجزء المتأثر من المشروع. اختياري لكنه مفيد جداً للمشاريع الكبيرة.

```bash
feat(blog): add comment system
fix(auth): resolve login redirect bug
refactor(api): simplify user endpoint
docs(readme): add deployment instructions
```

### Scopes شائعة في مشاريع TYPO3

- `sitepackage` — خاص بالـ sitepackage extension
- `typoscript` — تغييرات TypoScript
- `fluid` — Fluid templates
- `extbase` — Extbase extensions
- `i18n` — الترجمة والـ multi-language
- `backend` — TYPO3 backend
- `frontend` — TYPO3 frontend
- `config` — ملفات الإعدادات

---

## ⚠️ Breaking Changes

لما يكون التغيير يكسر التوافق مع الكود القديم، نضيف علامة `!` بعد النوع أو السكوب.

### طريقة 1: علامة التعجب

```bash
feat!: migrate from TYPO3 v12 to v13
feat(api)!: change authentication method
```

### طريقة 2: في body مع BREAKING CHANGE

```bash
feat: switch to new routing system

BREAKING CHANGE: Old routes in site.yaml are no longer supported.
Migration guide available in docs/migration.md
```

---

## ✍️ قواعد كتابة الوصف

### ✅ افعل

- ابدأ بفعل في المصدر (imperative mood): `add`, `fix`, `update`, `remove`
- اجعل الوصف مختصر — أقل من 50 حرف إن أمكن
- استخدم **حروف صغيرة** في البداية
- **لا** تضع نقطة `.` في النهاية
- اكتب بالإنجليزية (معيار دولي)

```bash
feat: add user authentication
fix: resolve null pointer in blog controller
```

### ❌ لا تفعل

```bash
feat: Added user authentication.           ← صيغة الماضي + Capital + نقطة
feat: i added the login form yesterday     ← طويل وغير مهني
fix: bug                                   ← غامض
FEAT: ADD LOGIN                            ← أحرف كبيرة
```

---

## 🌟 أمثلة كاملة من مشروع Tech Blog

هذه أمثلة لـ commits ستكتبها خلال تطوير مشروعنا:

### أسبوع 1 — الإعداد

```bash
git commit -m "feat: initial TYPO3 v13 setup with DDEV"
git commit -m "chore: add .gitignore for TYPO3 project"
git commit -m "docs: add project README"
```

### أسبوع 2 — Sitepackage + TypoScript

```bash
git commit -m "feat(sitepackage): create custom sitepackage extension"
git commit -m "feat(typoscript): configure page rendering"
git commit -m "feat(typoscript): add meta tags and SEO config"
git commit -m "style(typoscript): format constants file"
```

### أسبوع 3 — Fluid Templates

```bash
git commit -m "feat(fluid): add base page layout"
git commit -m "feat(fluid): create blog post listing template"
git commit -m "feat(fluid): add header and footer partials"
git commit -m "fix(fluid): resolve missing variable in partial"
```

### أسبوع 4 — Extbase Extension

```bash
git commit -m "feat(extbase): create BlogPost domain model"
git commit -m "feat(extbase): add BlogPostRepository"
git commit -m "feat(extbase): implement BlogPostController"
git commit -m "test(extbase): add unit tests for BlogPostRepository"
```

### أسبوع 5 — Multi-language

```bash
git commit -m "feat(i18n): configure DE and EN languages in site config"
git commit -m "feat(i18n): add German translations for blog labels"
git commit -m "feat(i18n): add language switcher in header"
git commit -m "fix(i18n): resolve fallback language issue"
```

### أسبوع 6 — النشر

```bash
git commit -m "feat(deploy): add production deployment config"
git commit -m "ci: add GitHub Actions for automated deployment"
git commit -m "perf: enable TYPO3 page cache in production"
git commit -m "docs: add deployment guide"
```

---

## 🛠️ أدوات تساعدك

### 1. VS Code Extension — Conventional Commits

الأداة الأسهل للبدء:

```
الاسم: Conventional Commits
المعرّف: vivaxy.vscode-conventional-commits
```

**خطوات التثبيت:**

1. افتح VS Code
2. اذهب إلى Extensions (Ctrl+Shift+X)
3. ابحث عن "Conventional Commits"
4. ثبّت الإضافة من vivaxy
5. افتح Source Control panel واضغط على أيقونة الـ commit

ستظهر قائمة منسدلة تختار منها النوع بسهولة.

### 2. Commitizen (CLI)

أداة سطر أوامر للفرق الاحترافية:

```bash
npm install -g commitizen cz-conventional-changelog
echo '{ "path": "cz-conventional-changelog" }' > ~/.czrc

# بدل git commit استخدم
git cz
```

### 3. Commitlint — فرض القواعد تلقائياً

للمشاريع التي تريد أن تمنع commits غير متوافقة مع المعيار:

```bash
npm install --save-dev @commitlint/cli @commitlint/config-conventional
```

### 4. Semantic Release

أداة تولّد CHANGELOG.md ورقم إصدار جديد تلقائياً من commits:

```
feat: → minor version bump (1.1.0 → 1.2.0)
fix:  → patch version bump (1.1.0 → 1.1.1)
feat!: → major version bump (1.1.0 → 2.0.0)
```

---

## 🎓 فوائد عملية لك في سوق فيينا

### 1. الانطباع في المقابلات

كثير من recruiters و tech leads يفحصون GitHub. commits منظمة = انطباع احترافي فوري.

### 2. العمل الجماعي

شركات مثل `in2code`, `b13`, `NITSAN` تستخدم Conventional Commits في مشاريعها — ستندمج معهم بسرعة.

### 3. Changelogs تلقائية

`semantic-release` يقرأ commits ويولّد CHANGELOG.md ورقم إصدار تلقائياً.

### 4. Pull Requests أوضح

لما تفتح PR، reviewers يفهمون بسرعة ماذا فعلت وأين.

---

## 📝 قالب سريع (Cheat Sheet)

احفظ هذا بمكان تصله بسرعة:

```
feat:     ميزة جديدة
fix:      إصلاح خطأ
docs:     توثيق
style:    تنسيق
refactor: إعادة هيكلة
test:     اختبارات
chore:    صيانة
perf:     أداء

الصيغة: type(scope): description
مثال:   feat(blog): add comment system
```

---

## 🔗 موارد إضافية

- **الموقع الرسمي:** https://www.conventionalcommits.org/
- **Angular Guidelines:** https://github.com/angular/angular/blob/main/CONTRIBUTING.md#commit
- **Semantic Versioning:** https://semver.org/

---

## ✅ خلاصة

1. استخدم `feat:` للميزات الجديدة
2. استخدم `fix:` لإصلاح الأخطاء
3. اكتب الوصف بالإنجليزية، مختصر، وصيغة المصدر
4. أضف `scope` للمشاريع الكبيرة
5. استخدم `!` أو `BREAKING CHANGE` للتغييرات الكبيرة

**القاعدة الذهبية:** لو مطوّر آخر قرأ commit واحد فقط، لازم يفهم ماذا تغيّر بدون ما يفتح الكود.

---

*تم إنشاء هذا الدليل كمرجع لمشروع Tech Blog TYPO3 v13*
