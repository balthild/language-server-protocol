import * as fs from 'node:fs';
import * as path from 'node:path';

import ts from 'typescript';

import { createNodeMap } from './nodeMap.ts';
import { PhpClassResolver } from './phpClass.ts';
import { Renderer } from './renderer.ts';
import { Transpiler } from './transpiler.ts';
import { TypeConverter } from './typeConverter.ts';
import { Writer } from './writer.ts';

const protocolLibDir = path.resolve(
	import.meta.dirname,
	'../node_modules/vscode-languageserver-protocol/lib',
);

const typesLibDir = path.resolve(
	import.meta.dirname,
	'../node_modules/vscode-languageserver-types/lib',
);

const protocolModule = (name: string): string => path.resolve(protocolLibDir, 'common', name);

const paths = [
	protocolModule('protocol.d.ts'),
	protocolModule('protocol.foldingRange.d.ts'),
	protocolModule('protocol.workspaceFolder.d.ts'),
	protocolModule('protocol.fileOperations.d.ts'),
	protocolModule('protocol.progress.d.ts'),
	protocolModule('protocol.colorProvider.d.ts'),
	protocolModule('protocol.configuration.d.ts'),
	protocolModule('protocol.declaration.d.ts'),
	protocolModule('protocol.typeDefinition.d.ts'),
	protocolModule('protocol.implementation.d.ts'),
	protocolModule('protocol.selectionRange.d.ts'),
	protocolModule('protocol.inlayHint.d.ts'),
	protocolModule('protocol.inlineValue.d.ts'),
	protocolModule('protocol.callHierarchy.d.ts'),
	protocolModule('protocol.diagnostic.d.ts'),
	protocolModule('protocol.linkedEditingRange.d.ts'),
	protocolModule('protocol.moniker.d.ts'),
	protocolModule('protocol.notebook.d.ts'),
	protocolModule('protocol.semanticTokens.d.ts'),
	protocolModule('protocol.showDocument.d.ts'),
	protocolModule('protocol.typeHierarchy.d.ts'),
	// The protocol modules only import these; the generator does not follow imports.
	path.resolve(typesLibDir, 'umd', 'main.d.ts'),
	path.resolve(typesLibDir, 'esm', 'main.d.ts'),
	path.resolve(import.meta.dirname, 'stubs.ts'),
];

const nodes = paths.map((file) => {
	const code = fs.readFileSync(file, 'utf8');
	return ts.createSourceFile(file, code, ts.ScriptTarget.Latest, true);
});

const [pattern] = process.argv.slice(2);
const filter = pattern === undefined ? undefined : new RegExp(pattern);

const nodeMap = createNodeMap(nodes, filter);
const typeConverter = new TypeConverter(nodeMap);
const phpClasses = new PhpClassResolver(nodeMap, typeConverter).fromNodeMap();

const transpiler = new Transpiler(
	new Writer(path.resolve(import.meta.dirname, '..', 'src')),
	new Renderer(),
);

transpiler.transpile(phpClasses);
