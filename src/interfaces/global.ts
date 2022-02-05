// Layout
export type Themes = "dark" | "light";

export interface DefaultContent {
  layout: Layout;
}

export interface Layout {
  templateName: string;
  header: Header;
  sidebar: string;
  footer: Footer;
}

export interface Header {
  menu: string;
  logoSrc: string;
  siteName: string;
  homeUrl: string;
}

export interface Footer {
  footerSidebar: string;
}

// Posts
export interface Post {
  title: string;
  content: string;
  thumbUrl?: string;
}

export interface ArchiveItem extends Post {
  permalink: string | null;
  publishDate: string;
}

export interface ArchivePost extends ArchiveItem {
  categories: string;
}

export interface Article extends Post {
  publishDate: string;
  categories: Category[];
}

export interface Category {
  cat_ID: number;
  name: string;
  slug: string;
  taxonomy: string;
}

export interface Social {
  title: string;
  link: string;
  thumbUrl: string;
}
