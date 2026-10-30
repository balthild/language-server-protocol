import * as fs from 'node:fs';
import * as path from 'node:path';

export class Writer {
	private readonly outdir: string;

	constructor(outdir: string) {
		this.outdir = outdir;
	}

	write(name: string, contents: string): void {
		const outpath = path.join(this.outdir, `${name}.php`);

		fs.mkdirSync(path.dirname(outpath), { recursive: true });
		fs.writeFileSync(outpath, contents);
	}
}
