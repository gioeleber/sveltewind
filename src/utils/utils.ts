export const desirializeData = (data: DOMStringMap) => {
  return data.props
    ? JSON.parse(decodeURIComponent(data.props?.replace(/\+/g, " ") ?? ""))
    : console.error("Target does not have daset-props");
};
