import { resolve } from "path";
import { defineConfig } from "vite";
import laravel from "laravel-vite-plugin";

export default defineConfig(({ mode }) => ({
  base: mode === "development" ? "/" : "/dist/",

  build: {
    outDir: resolve(__dirname, "dist"),
    emptyOutDir: true,
    manifest: "manifest.json",
  },
  plugins: [
    laravel({
      input: ["src/index.js", "src/index.css"],
      hotFile: "vite.hot",
      refresh: ["site/{layouts,snippets,templates}/**/*"],
    }),
  ],
}));
