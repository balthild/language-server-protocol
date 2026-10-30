import { defineConfig } from 'oxlint';

export default defineConfig({
	plugins: ['oxc', 'unicorn', 'typescript', 'import', 'node', 'promise'],
	options: { typeAware: true },
	rules: {
		'import/extensions': ['error', 'always', { ignorePackages: true }],
		'import/consistent-type-specifier-style': 'warn',
		'unicorn/prefer-node-protocol': 'warn',
	},
});
