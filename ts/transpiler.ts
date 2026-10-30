import type { PhpClasses } from './phpClass.ts';
import type { Renderer } from './renderer.ts';
import type { Writer } from './writer.ts';

export class Transpiler {
	private readonly writer: Writer;
	private readonly renderer: Renderer;

	constructor(writer: Writer, renderer: Renderer) {
		this.writer = writer;
		this.renderer = renderer;
	}

	transpile(phpClasses: PhpClasses): void {
		for (const phpClass of phpClasses.values()) {
			this.writer.write(phpClass.name, this.renderer.render(phpClass));
		}
	}
}
