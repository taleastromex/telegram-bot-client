import js from '@eslint/js'
import vue from 'eslint-plugin-vue'
import tseslint from 'typescript-eslint'
import globals from 'globals'

export default tseslint.config(
    js.configs.recommended,
    ...tseslint.configs.recommended,
    ...vue.configs['flat/recommended'],
    {
        // TypeScript parser for <script lang="ts"> inside .vue files
        files: ['**/*.vue'],
        languageOptions: {
            parserOptions: {
                parser: tseslint.parser,
            },
        },
    },
    {
        languageOptions: {
            globals: {
                ...globals.browser,
            },
        },
    },
    {
        rules: {
            // Single-word component names are used throughout the project
            'vue/multi-word-component-names': 'off',
            // Header.vue conflicts with reserved HTML tag name — rename when convenient
            'vue/no-reserved-component-names': 'warn',
            // any is used in legacy request modules, suppress as warning
            '@typescript-eslint/no-explicit-any': 'warn',
            // Project uses 4-space indentation in templates
            'vue/html-indent': ['warn', 4],
        },
    },
)
