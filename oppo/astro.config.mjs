// @ts-check
import { defineConfig } from 'astro/config';
import mdx from '@astrojs/mdx';
import sitemap from '@astrojs/sitemap';
import tailwindcss from '@tailwindcss/vite';



import icon from 'astro-icon';



// https://astro.build/config
export default defineConfig({
  base: "/",
  trailingSlash: 'always',
  prefetch: {
      prefetchAll: true
    },
  output: 'static',
  site: 'https://example.com',
  integrations: [mdx(), sitemap(), icon()],

  vite: {
    plugins: [tailwindcss()],
    define: {
      'process.env.PUBLIC_API_URL': JSON.stringify(process.env.PUBLIC_API_URL)
    }
  },
 
});