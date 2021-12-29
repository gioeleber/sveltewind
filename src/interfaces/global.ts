export type Themes = "dark" | "light";

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
