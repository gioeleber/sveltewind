// View your website at your own local server
// for example http://boilerplate.test

// http://localhost:3000 is serving Vite on development
// but accessing it directly will be empty

// IMPORTANT image urls in CSS works fine
// BUT you need to create a symlink on dev server to map this folder during dev
// ln -s {path_to_project}/app/themes/{your_theme}/src/assets {path_to_project}/html/assets
// on production everything will work just fine

import { defineConfig } from "vite";
import { svelte } from "@sveltejs/vite-plugin-svelte";
import viteWatchAdd from "./src/plugin/vite-watch-add.js";

export default ({ command }) =>
  defineConfig({
    plugins: [svelte(), viteWatchAdd({ path: "**/*.php", extension: ".php" })],
    base: command === "serve" ? "" : "/build/",
    publicDir: "fake_dir_so_nothing_gets_copied",

    build: {
      manifest: true,
      outDir: "public/build",
      rollupOptions: {
        input: "src/main.ts",
      },
    },

    server: {
      cors: true,
      strictPort: true,
      port: 3000,
    },
  });
