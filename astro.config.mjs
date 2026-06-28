// @ts-check
import { defineConfig } from "astro/config";
import { siteUrl } from "./site.config.js";

export default defineConfig({
    site: siteUrl,
    output: "static",
});
